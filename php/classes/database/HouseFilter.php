<?

    /**
     * Класс для фильтрации домов
     */
    class HouseFilter extends AbstractFilter
    {
        public $house = null;

        /**
         * Получает условия AND для where части запроса
         * @return string
         */
        function get_where(): string
        {
            $query = "";

            // Фильтр по дому
            if ($this->house) {
                $query .= " AND (ID_SD_HOUSE = '{$this->house->id}')";
            }

            return $query;
        }
    }
