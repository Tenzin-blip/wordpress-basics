<?php
// This file is generated. Do not modify it manually.
return array(
	'copyright-date-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'copyright-date/copyright-date-block',
		'version' => '0.1.0',
		'title' => 'Copyright Date Block',
		'category' => 'widgets',
		'icon' => 'calendar',
		'description' => 'Block that updates the copyright starting date.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'copyright-date-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			'startingYear' => array(
				'type' => 'string',
				'default' => '2000'
			)
		)
	)
);
