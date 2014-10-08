(->
	_ = require 'underscore'
	module.exports.extendGrantTask = (grunt)->
		# ======================================================================
		# パラメータ
		# ======================================================================
		config = grunt.config()
		gc     = grunt.glabalParam
		# ----------------------------------------------------------------------
		syncHost     = gc.host
		syncBaseDir  = '/Library/work/banpaku/main/html/'
		syncIndex    = 'index.php'
		syncWatchSrc = [
			syncBaseDir + '*.php',
			gc.jsDir + '*.js',
			gc.cssDir + '*.css'
		]
		syncGhosts = 
			scroll : true,
			links  : false,
			forms  : true
		# ======================================================================
		# タスク設定
		# ======================================================================
		grunt.extendConfig({
			browser_sync : 
				files :
					src : syncWatchSrc
				options : 
					host      : syncHost,
					debugInfo : true,
					proxy     : 'localhost:80',
					ghostMode : syncGhosts
					server    : 
						baseDir : syncBaseDir,
						index   : syncIndex
		})
		# ======================================================================
		# タスク登録
		# ======================================================================
		grunt.registerTask 'sync', 'bower sync', ()->
			grunt.loadNpmTasks 'grunt-browser-sync'
			grunt.task.run('browser_sync')
	return
)()