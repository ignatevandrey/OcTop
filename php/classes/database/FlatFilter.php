<?

    /**
     * Класс для фильтрации квартир
     */
    class FlatFilter extends AbstractFilter
    {
        public $rooms = null;

        /**
         * Получает условия AND для where части запроса
         * @return string
         */
        function get_where(): string
        {
            $query = "";

            // Фильтр по кол-ву комнат
            if ($this->rooms) {
                $query .= " AND (SD_HOUSE_FLAT_ROOMS = {$this->rooms})";
            }

            return $query;
        }
    }
