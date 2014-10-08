(->
	_ = require 'underscore'
	module.exports.extendGrantTask = (grunt)->
		# ======================================================================
		# パラメータ
		# ======================================================================
		config = grunt.config()
		gc     = grunt.glabalParam
		# ----------------------------------------------------------------------
		sassStlyeTpye      = 'scss'
		sassCacheDir       = gc.cacheDir + '.sass'
		 # ヘルパー関数のパスの設定 trueで相対パス。falseで絶対パス
		devRelativeAssets  = true
		prodRelativeAssets = true
		# 絶対パスで指定する場合のhttpathからsassファイルまでのパス
		sassSrcPath        = gc.httpPath + gc.srcDir + ''
		sassRaw            = 'preferred_syntax = :'+sassStlyeTpye+'\n'
		sassRequire        = gc.sass.require;
		# 外部Sassファイルの読み込み
		sassImportPath     = gc.sass.importPath;
		# ======================================================================
		# タスク設定
		# ======================================================================
		grunt.extendConfig({
			uglify :
				javascript : 
					files : [
						expand : true
						cwd    : gc.jsDir
						src    : ['{,*/}*.js']
						dest   : gc.jsDir
					]
		})
		# ======================================================================
		# タスク登録
		# ======================================================================
		# Compass product mode
		# ----------------------------------------------------------------------
		grunt.registerTask 'uglify:js', 'uglify JavaScript', ()->
			grunt.loadNpmTasks('grunt-contrib-uglify')
			grunt.task.run('uglify:javascript')
			return
		

	return
)()