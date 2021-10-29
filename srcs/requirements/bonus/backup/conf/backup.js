const shell = require('child_process').execSync;

const wpDataDir = "/wp-data"
const dbDataDir = "/db-data"
const backUpDir = "/backup"

setInterval(() => {
	shell(`mkdir -p ${backUpDir}/${wpDataDir} && cp -r ${wpDataDir}/* ${backUpDir}/${wpDataDir}`)
	shell(`mkdir -p ${backUpDir}/${dbDataDir} && cp -r ${dbDataDir}/* ${backUpDir}/${dbDataDir}`)
}, 60000)
