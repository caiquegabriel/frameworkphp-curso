<?php

    class Route
    {
        /**
         * @param string $method
         * @param string $route
         * @param Closure $closure
         * @return void
         */
        private static function route(string $method, string $route, Closure $closure)
        {
            if ($_SERVER['REQUEST_URI'] == $route && strtoupper($_SERVER['REQUEST_METHOD']) === strtoupper($method)) {
                $closure();
                exit();
            }
        }

        /**
         * Método GET
         * @param string $route
         * @param Closure $closure
         * @return void
         */
        public static function get(string $route, Closure $closure): void
        {
            self::route('get', $route, $closure);
        }

        /**
         * Método PUT
         * @param string $route
         * @param Closure $closure
         * @return void
         */
        public static function put(string $route, Closure $closure): void
        {
            self::route('put', $route, $closure);
        }

       /**
         * Método POST
         * @param string $route
         * @param Closure $closure
         * @return void
         */
        public static function post(string $route, Closure $closure): void
        {
            self::route('post', $route, $closure);
        }

        /**
         * Método DELETE
         * @param string $route
         * @param Closure $closure
         * @return void
         */
        public static function delete(string $route, Closure $closure): void
        {
            self::route('delete', $route, $closure);
        }
    }