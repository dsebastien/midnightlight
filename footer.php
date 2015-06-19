				</p>

			</div>

		</div>

		

		<?php get_sidebar(); ?>

		

		<div class="span-24 last" id="footer">

			<ul>

				<li class="first">WP Theme © Sébastien</li>

				<li><a title="RSS Feed" href="https://feeds.feedburner.com/MidnightLight" style="border: 0 !important;"><img src="<?php bloginfo('template_url'); ?>/images/feed-icon-small.png" alt="RSS"/>&nbsp;RSS Feed</a></li>

				<li><?php wp_loginout(); ?></li>

				<li><a href="#logoTile" title="Return to the top of the page">Bring me back on top!</a></li>

			</ul>

		</div>

	</div>

 </div>

 </div>

 </body>

	<script type="text/javascript">
		var baseSyntaxHighlighterScriptsPath = "<?php bloginfo('template_url'); ?>/lib/syntaxhighlighter/scripts/";
		function getSyntaxHighlighterScriptPath(name){
			return name.replace('@', baseSyntaxHighlighterScriptsPath);
		}
		
		SyntaxHighlighter.autoloader(
			[ 'applescript', getSyntaxHighlighterScriptPath('@shBrushAppleScript.js') ],
			[ 'actionscript3', 'as3', getSyntaxHighlighterScriptPath('@shBrushAS3.js') ],
			[ 'bash', 'shell', getSyntaxHighlighterScriptPath('@shBrushBash.js') ],
			[ 'coldfusion', 'cf', getSyntaxHighlighterScriptPath('@shBrushColdFusion.js') ],
			[ 'cpp', 'c', getSyntaxHighlighterScriptPath('@shBrushCpp.js') ],
			[ 'c#', 'c-sharp', 'csharp', getSyntaxHighlighterScriptPath('@shBrushCSharp.js') ],
			[ 'css', getSyntaxHighlighterScriptPath('@shBrushCss.js') ],
			[ 'diff', 'patch', 'pas', getSyntaxHighlighterScriptPath('@shBrushDiff.js') ],
			[ 'erl', 'erlang', getSyntaxHighlighterScriptPath('@shBrushErlang.js') ],
			[ 'groovy', getSyntaxHighlighterScriptPath('@shBrushGroovy.js') ],
			[ 'java', getSyntaxHighlighterScriptPath('@shBrushJava.js') ],
			[ 'jfx', 'javafx', getSyntaxHighlighterScriptPath('@shBrushJavaFX.js') ],
			[ 'js', 'javascript', 'jscript', getSyntaxHighlighterScriptPath('@shBrushJScript.js') ],
			[ 'perl', 'pl', getSyntaxHighlighterScriptPath('@shBrushPerl.js') ],
			[ 'php', getSyntaxHighlighterScriptPath('@shBrushPhp.js') ],
			[ 'text', 'plain', getSyntaxHighlighterScriptPath('@shBrushPlain.js') ],
			[ 'py', 'python', getSyntaxHighlighterScriptPath('@shBrushPython.js') ],
			[ 'ruby', 'rails', 'ror', 'rb', getSyntaxHighlighterScriptPath('@shBrushRuby.js') ],
			[ 'sass', 'scss', getSyntaxHighlighterScriptPath('@shBrushSass.js') ],
			[ 'scala', getSyntaxHighlighterScriptPath('@shBrushScala.js') ],
			[ 'sql', getSyntaxHighlighterScriptPath('@shBrushSql.js') ],
			[ 'vb', 'vbnet', getSyntaxHighlighterScriptPath('@shBrushVb.js') ],
			[ 'xml', 'xslt', 'html', 'htm', getSyntaxHighlighterScriptPath('@shBrushXml.js') ]
		);
		
		SyntaxHighlighter.all();
	</script>

</html>