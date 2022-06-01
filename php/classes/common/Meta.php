<?
    /**
     * Класс данных для метатегов
     */
    class Meta
    {
        public $title = "ЖК «Аврора» - Официальный сайт застройщика";
        public $description = "Свои апартаменты в Ялте с видом на море. Старт продаж";
        public $keywords = "ЖК Аврора, Ялта, вид на море, теплый климат";
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
