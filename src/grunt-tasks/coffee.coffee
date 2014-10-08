(->
	_ = require 'underscore'
	module.exports.extendGrantTask = (grunt)->
		# ======================================================================
		# パラメータ
		# ======================================================================
		config = grunt.config()
		gc     = grunt.glabalParam
		# ======================================================================
		# タスク設定
		# ======================================================================
		grunt.extendConfig({
			coffee : 
				develop : 
					options : 
						sourceMap : true
						bare      : false
					expand    : true
					flatten   : false
					cwd       : gc.coffeeDir
					src       : ['{,*/}*.coffee']
					dest      : gc.jsDir
					ext       : '.js'
				product : 
					options : 
						sourceMap : false
						bare      : false
					expand    : true
					flatten   : true
					cwd       : gc.coffeeDir
					src       : ['{,*/}*.coffee']
					dest      : gc.jsDir
					ext       : '.js'
		})
		# ======================================================================
		# タスク登録
		# ======================================================================
		# Coffee develop
		# ----------------------------------------------------------------------
		grunt.registerTask 'coffee:dev', 'coffee compile develop mode', ()->
			grunt.loadNpmTasks 'grunt-contrib-coffee'
			grunt.task.run('coffee:develop')
		# ----------------------------------------------------------------------
		# Coffee product
		# ----------------------------------------------------------------------
		grunt.registerTask 'coffee:prod', 'coffee compile product mode', ()->
			grunt.loadNpmTasks 'grunt-contrib-coffee'
			grunt.task.run('coffee:product')
	return
)()