'use strict'

module.exports = (grunt) ->
	_ = require 'underscore'
	# ==========================================================================
	# 共通項目
	# ==========================================================================
	grunt.pkg         = grunt.file.readJSON 'package.json'
	grunt.glabalParam = gc = 
		projectPath : './'
		httpPath    : '/'
		srcDir      : 'src/'
		cssDir      : 'css/'
		sassDir     : 'sass/'
		imagesDir   : 'img/'
		jsDir       : 'js/'
		coffeeDir   : 'coffee/'
		tsDir       : 'ts/'
		fontDir     : 'font/'
		cacheDir    : 'temp/'

	gc.sass = 
		require : [
			#'compass-growl'
		]
		importPath : [
		]

	gc.watchDirs = []

	# watch範囲を追加したい場合はここに記載
	# [拡張子, パス]
	_watchDir = [
		['.sass', gc.sassDir]
		['.scss', gc.sassDir]
		['.coffee', gc.coffeeDir]
		['.ts', gc.tsDir]
	]
	# 階層を深くしたい場合はここ
	# ['*','**/*','**/**/*']に増やす
	for val in _watchDir
		for path in ['*','**/*','**/**/*'] then gc.watchDirs.push val[1] + path + val[0]

	# //////////////////////////////////////////////////////////////////////////
	# 拡張機能
	# --------------------------------------------------------------------------
	# 参考：[grunt] Gruntfile.jsをチーム共有用と個人用にファイル分割して、gitやsvnのコンフリクトを減らす方法
	# http://www.yoheim.net/blog.php?q=20130410
	# //////////////////////////////////////////////////////////////////////////
	grunt.extendConfig = (addConf)->
		conf = grunt.config()
		for prop of addConf
			if addConf.hasOwnProperty prop
				if conf[prop]
					conf[prop] = _.extend conf[prop], addConf[prop]
				else
					tmpConf = {}
					tmpConf[prop] = addConf[prop]
					conf = _.extend conf, tmpConf
		grunt.initConfig conf

	# //////////////////////////////////////////////////////////////////////////
	# タスク呼び出し
	# //////////////////////////////////////////////////////////////////////////
	# compass
	# --------------------------------------------------------------------------
	_compass = require './grunt-tasks/compass.coffee'
	_compass.extendGrantTask grunt
	# --------------------------------------------------------------------------
	# Coffee Script
	# --------------------------------------------------------------------------
	_coffee = require './grunt-tasks/coffee.coffee'
	_coffee.extendGrantTask grunt
	# --------------------------------------------------------------------------
	# browser sync
	# --------------------------------------------------------------------------
	_browser_sync = require './grunt-tasks/browser_sync.coffee'
	_browser_sync.extendGrantTask grunt
	# --------------------------------------------------------------------------
	# browser sync
	# --------------------------------------------------------------------------
	_uglify = require './grunt-tasks/uglify.coffee'
	_uglify.extendGrantTask grunt
	# --------------------------------------------------------------------------
	# este-watch
	# --------------------------------------------------------------------------
	_este_watch = require './grunt-tasks/este-watch.coffee'
	_este_watch.extendGrantTask grunt

	# //////////////////////////////////////////////////////////////////////////
	# タスク登録
	# //////////////////////////////////////////////////////////////////////////
	grunt.registerTask 'product', 'product mode', ()->
		grunt.loadNpmTasks('grunt-contrib-compass')
		grunt.loadNpmTasks('grunt-contrib-coffee')
		grunt.loadNpmTasks('grunt-contrib-uglify')
		grunt.task.run('compass:product')
		grunt.task.run('coffee:prod')
		grunt.task.run('uglify:js')

	return