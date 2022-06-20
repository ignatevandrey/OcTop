<?
    /**
     * Класс данных для метатегов
     */
    class Meta
    {
        public $title = "Forbion - аренда 1с в облаке";
        public $description = "Аренда 1с в облаке";
        public $keywords = "1с, 1с в облаке, аренда 1с, 1с в интернете";
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
