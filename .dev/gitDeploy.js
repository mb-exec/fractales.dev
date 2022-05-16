const { gitSSH, buildPath } = require('./config');

function deployBuild(cb) {
  const simpleGit = require('simple-git');
  const git = simpleGit({
    baseDir: buildPath,
    binary: 'git'
  })

  git.checkIsRepo('root')
    .then(isRepo => {
      if (!isRepo) {
        console.log('as');
        git.init()
          .then(() => git.addRemote('origin', gitSSH))
          .then(() => git.checkout(['-b', 'prod']))
      }
    })
    .then(() => {
      git
        // .status((e, s) => console.log(s))
        .add('./*')
        .commit('upd production build')
        .push(['-u', 'origin', 'prod', '--force'])
    })
    .finally(() => cb()) 
}

function initialiseRepo (git) {
  return git.init()
     .then(() => git.addRemote('origin', gitSSH))
     .then(() => git.checkout(['-b', 'prod']))
}

module.exports = deployBuild