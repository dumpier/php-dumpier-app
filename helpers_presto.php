<?php
if(! function_exists("presto")) { /** @return \Presto\Facade\PrestoFacade */ function presto() { return \Presto\Facade\PrestoFacade::instance(); }}
if(! function_exists("util")) { /** @return \Presto\Facade\UtilityFacade */ function util() { return \Presto\Facade\UtilityFacade::instance(); }}
if(! function_exists("html")) { /** @return \Presto\Facade\HtmlFacade */ function html() { return \Presto\Facade\HtmlFacade::instance(); }}


// app
if(! function_exists("app")){ /** @return object */ function app(string $class, ...$parameters) { return \Presto\Core\Presto::instance()->app($class, ...$parameters); }}
if(! function_exists("path")) { /** @return string */ function path(string $path="") { return ($path) ? \Presto\Core\Utilities\Pather::instance()->path($path) : \Presto\Core\Utilities\Pather::instance(); } }
if(! function_exists("routing")) { /** @return \Presto\Core\Routing */ function routing() { return \Presto\Core\Routing::instance(); }}
if(! function_exists("response")){ /** @return \Presto\Core\Response */ function response() { return \Presto\Core\Response::instance(); }}
if(! function_exists("request")){ /** @return \Presto\Core\Request */ function request() { return \Presto\Core\Request::instance(); }}
if(! function_exists("input")) { /** @return mixed */ function input(string $name="", $default=null) { return \Presto\Core\Request::instance()->input($name, $default); } }



// utilities
if(! function_exists("arrayer")) { /** @return \Presto\Core\Utilities\Arrayer */ function arrayer() { return \Presto\Core\Utilities\Arrayer::instance(); }}
if(! function_exists("collection")) { /** @return \Presto\Core\Utilities\Collection */ function collection(array $rows=[]) { return new \Presto\Core\Utilities\Collection($rows); }}
if(! function_exists("encrypter")) { /** @return \Presto\Core\Utilities\Encrypter */ function encrypter() { return \Presto\Core\Utilities\Encrypter::instance(); }}
if(! function_exists("paginator")) { /** @return \Presto\Core\Utilities\Paginator */ function paginator(array $rows=[], int $total_count=0, int $page=1, int $limit=\Presto\Core\Helpers\Html\PagerTag::LIMIT_COUNT) { return new \Presto\Core\Utilities\Paginator($rows, $total_count, $page, $limit); }}
if(! function_exists("stringer")) { /** @return \Presto\Core\Utilities\Stringer */ function stringer() { return \Presto\Core\Utilities\Stringer::instance(); }}
if(! function_exists("pregular")) { /** @return \Presto\Core\Utilities\Pregular */ function pregular() { return \Presto\Core\Utilities\Pregular::instance(); }}
if(! function_exists("expression")) { /** @return \Presto\Core\Utilities\Expression */ function expression() { return \Presto\Core\Utilities\Expression::instance(); }}
if(! function_exists("validator")) { /** @return \Presto\Core\Utilities\Validator */ function validator() { return \Presto\Core\Utilities\Validator::instance(); }}
if(! function_exists("condition")) { /** @return \Presto\Core\Utilities\FilteringCondition */ function condition(array $condition=[]) { return new \Presto\Core\Utilities\FilteringCondition($condition); }}
if(! function_exists("parameter")) { /** @return \Presto\Core\Utilities\FilteringParameter */ function parameter(array $parameter=[]) { return new \Presto\Core\Utilities\FilteringParameter($parameter); }}
if(! function_exists("breadcrumb")) { /** @return \Presto\Core\Utilities\Breadcrumb */ function breadcrumb(array $rows=[]) { return \Presto\Core\Utilities\Breadcrumb::instance()->adds($rows); }}
if(! function_exists("debugbar")) { /** @return \Presto\Core\Utilities\Debugbar */ function debugbar() { return \Presto\Core\Utilities\Debugbar::instance(); }}


// files
if(! function_exists("config")) { function config(string $filename, string $key="") { return \Presto\Core\Utilities\Files\ConfigLoader::instance()->get($filename, $key); }}
if(! function_exists("directory")) { /** @return \Presto\Core\Utilities\Files\DirectoryLoader */ function directory() { return \Presto\Core\Utilities\Files\DirectoryLoader::instance(); }}
if(! function_exists("csv")) { /** @return \Presto\Core\Utilities\Files\CsvLoader */ function csv() { return \Presto\Core\Utilities\Files\CsvLoader::instance(); }}


// database
if(! function_exists("database")) {
    /** @return \Presto\Core\Databases\QueryBuilder */
    function database(string $name="", string $database="") {
        if(empty($name) && empty($database))
        {
            return \Presto\Core\Databases\QueryBuilder::instance();
        }
        return \Presto\Core\Databases\QueryBuilder::instance()->connect($name, $database);
    }
}
if(! function_exists("select")) { /** @return mixed */ function select(string $query, array $binds=[], $name=null) { return \Presto\Core\Databases\QueryBuilder::instance()->select($query, $binds, $name); }}
