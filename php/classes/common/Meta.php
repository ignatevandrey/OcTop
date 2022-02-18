<?
    /**
     * Класс данных для метатегов
     */
    class Meta
    {
        public $title = "TEMPLATE Девелопмент";
        public $description = "TEMPLATE Девелопмент";
        public $keywords = "TEMPLATE Девелопмент";
        public $image = "/img/og-image.png";
        public $url;

        /**
         * Meta constructor
         */
        public function __construct()
        {
            $this->url = get_current_url(false);
        }

    }
