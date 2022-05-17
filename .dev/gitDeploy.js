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
        git.init()
          .then(() => git.addRemote('origin', gitSSH))
          .then(() => git.checkout(['-b', 'prod']))
      }
    })
    .then(() => {
      git.add('./*')
        .commit('upd production build')
        .push(['-u', 'origin', 'prod', '--force'])
    })
    .finally(() => cb()) 
}

module.exports = deployBuild