const { gitSSH, buildPath } = require('./config');

const simpleGit = require('simple-git');
const git = simpleGit({
  baseDir: buildPath,
  binary: 'git'
})

function deployBuild(cb) {
  git.init()
    .addRemote('origin', gitSSH)
    .checkout(['-b', 'prod'])
    .add('./*')
    .commit('upd production build')
    .push(['-u', 'origin', 'prod', '--force'])
    .catch(e => console.log(e))
    .finally(() => cb())
}

module.exports = deployBuild