<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/3/2017
 * Time: 11:08 PM
 */
    namespace functions;
    class htmlTags {
        static public function changeRow($input) {
            return $input . '</br>';
        }
        static public function htmlHead() {
            return '<html>';
        }
        static public function htmlBody() {
            return '<body>';
        }
        static public function htmlEnd() {
            return '</html>';
        }
        static public function bodyEnd() {
            return '</body>';
        }
        static public function tableHead($name) {
            return '<table id=' . $name . ' align="center">';
        }
        static public function tableLineStart() {
            return '<tr>';
        }
        static public function tableLineEnd() {
            return '</tr>';
        }
        static public function tableTitle($input) {
            return '<th>' . $input . '</th>';
        }
        static public function tableDetail($input) {
            return '<td>' . $input . '</td>';
        }
        static public function tableEnd() {
            return '</table>';
        }
        static public function headingOne($input) {
            return '<h1>' . $input . '</h1>';
        }
        static public function pageStyles () {
            return '<link rel="stylesheet" href="styles.css">';
        }
        static public function turnPage($pageName, $input) {
            return '<input type="button" onclick="location.href=\'' .$pageName . '\'" value="' . $input . '">';
        }
        static public function horizontalRule() {
            return '<hr>';
        }
        static public function hyperLink ($link, $words = NULL) {
            return '<a href="' . $link . '">' . $words . '</a>';
        }
    }
?>