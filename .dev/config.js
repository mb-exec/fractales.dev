// const SERVER_URL = 'http://'
const SERVER_BASE_URL = 'http://localhost:8888'

const path = require('path');
const ROOT_FOLDER_NAME = path.resolve(__dirname, '../').split('/').pop()

const SERVER_URL = SERVER_BASE_URL + '/' + ROOT_FOLDER_NAME
