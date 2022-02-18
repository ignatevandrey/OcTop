<?

    /**
     * Класс данных для простой страницы
     */
    class SimplePage extends Page
    {

        /**
         * @param int $code
         * @param string $name
         * @param string $title
         * @throws Exception
         */
        public function __construct(int $code, string $name, string $title)
        {
            parent::__construct($code, $name, $title);
        }
    }
