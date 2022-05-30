const GITHUB_URL = 'https://github.com/mb-exec/fractales.dev.git';
const GITHUB_SSH = 'git@github.com:mb-exec/fractales.dev.git';

/**
 * OpenServer Win
 * site in `/OpenServer/domains/`
 */
const SERVER_BASE_URL = 'http://';

/**
 * MAMP MacOs
 */
// const SERVER_BASE_URL = 'http://localhost:8888'

const path = require('path');
const ROOT_FOLDER_NAME = path.resolve(__dirname, '../').split(path.sep).pop();

const SERVER_URL = new URL(SERVER_BASE_URL + '/' + ROOT_FOLDER_NAME);
const BUILD_FOLDER_PATH = ROOT_FOLDER_NAME + '/.build';

module.exports = {
  serverUrl: SERVER_URL.href,
  gitUrl: GITHUB_URL,
  gitSSH: GITHUB_SSH,
  buildPath: BUILD_FOLDER_PATH,
};
