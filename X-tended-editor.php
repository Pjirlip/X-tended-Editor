<?php

/*
Plugin Name: X Tended Editor
Plugin URI: https://dippel.rocks
Description: An simple plugin for an better Text Editor in X Pro
Version: 1.0
Author: Philipp Dippel
Author URI: https://dippel.rocks
License: MIT X11
*/

/*
MIT License

Copyright (c) 2017 Philipp Dippel

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

defined( 'ABSPATH' ) || exit();


function xtde_add_styles_and_scripts()
{
	wp_enqueue_style( 'xtde_custom_style', plugins_url( 'assets/xtde-styles.css', __FILE__ ), array(), '20171004', 'all');
	wp_enqueue_script( 'xtde_custom_script', plugins_url( 'assets/xtde-functions.js', __FILE__ ),  array( 'jquery' ), '20171004', true);
}

add_action('cornerstone_before_wp_editor', 'xtde_add_styles_and_scripts', 30);