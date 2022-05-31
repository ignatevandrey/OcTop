<?

    abstract class AbstractTable
    {
        public $id = null;

        /**
         * Название view для таблицы (или той же таблицы, если view нет)
         * @return string
         */
        abstract static function get_view_name(): string;

        /**
         * Исходное название таблицы
         * @return string
         */
        abstract static function get_table_name(): string;

        /**
         * Сортировка для таблицы
         * @return array
         */
        abstract static function get_order_by(): array;

        /**
         * Table constructor.
         * @param array $row
         */
        function __construct(array $row)
        {
            $this->id = $row["ID_" . static::get_table_name()];
        }

        /**
         * Получает одну запись из таблицы по запросу
         * @param string $query
         * @return mixed|null
         * @throws Exception
         */
        protected static function get_one_by_query(string $query)
        {
            $res = db_query($query);
            if ($res && db_num_rows($res)) {
                $row = db_fetch_assoc($res);
                return new static($row);
            } else {
                return null;
            }
        }

        /**
         * Получает все записи из таблицы по запросу. !! В запрос необходимо добавить get_order_by()
         * @param string $query
         * @return array
         * @throws Exception
         */
        protected static function get_all_by_query(string $query): array
        {
            $return = [];
            $res = db_query($query);
            if ($res && db_num_rows($res)) {
                while ($row = db_fetch_assoc($res)) {
                    array_push($return, new static($row));
                }
            }
            return $return;
        }

        /**
         * @param mixed $id
         * @return mixed|null
         * @throws Exception
         */
        public static function get_by_id($id)
        {
            $table_name = static::get_table_name();
            $view_name = static::get_view_name();
            return static::get_one_by_query("SELECT * FROM $view_name WHERE ID_$table_name = '$id' LIMIT 1");
        }

        /**
         * @param array $id_array
         * @return array
         * @throws Exception
         */
        public static function get_by_id_array(array $id_array): array
        {
            $table_name = static::get_table_name();
            $view_name = static::get_view_name();
            $db_ids = implode("', '", $id_array);
            return static::get_all_by_query("SELECT * FROM $view_name WHERE ID_$table_name IN ('$db_ids') ORDER BY " . implode(",", static::get_order_by()));
        }

        /**
         * @param AbstractFilter[] $filters
         * @param array $order_by
         * @return array
         * @throws Exception
         */
        public static function get_all(array $filters = [], array $order_by = []): array
        {
            $view_name = static::get_view_name();
            $query = "SELECT * FROM $view_name WHERE (1 = 1)";
            foreach ($filters as $filter) {
                $query .= $filter->get_where();
            }
            if ($order_by) {
                $query .= " ORDER BY " . implode(",", $order_by);
            } else {
                $query .= " ORDER BY " . implode(",", static::get_order_by());
            }
            return static::get_all_by_query($query);
        }

        /**
         * @param AbstractFilter[] $filters
         * @return int
         * @throws Exception
         */
        public static function get_count(array $filters = []): int
        {
            $table_name = static::get_table_name();
            $view_name = static::get_view_name();
            $query = "SELECT COUNT(*) as {$table_name}_COUNT FROM $view_name WHERE (1 = 1)";
            foreach ($filters as $filter) {
                $query .= $filter->get_where();
            }
            $res = db_query($query);
            if ($res && db_num_rows($res)) {
                $row = db_fetch_assoc($res);
                return $row["{$table_name}_COUNT"];
            } else {
                return 0;
            }
        }

        /**
         * @param int $limit
         * @param int $offset
         * @param AbstractFilter[] $filters
         * @param array $order_by
         * @return array
         * @throws Exception
         */
        public static function get_by_limit(int $limit, int $offset = 0, array $filters = [], array $order_by = []): array
        {
            $view_name = static::get_view_name();
            $query = "SELECT * FROM $view_name WHERE (1 = 1)";
            foreach ($filters as $filter) {
                $query .= $filter->get_where();
            }
            if ($order_by) {
                $query .= " ORDER BY " . implode(",", $order_by) . " LIMIT $offset, $limit";
            } else {
                $query .= " ORDER BY " . implode(",", static::get_order_by()) . " LIMIT $offset, $limit";
            }
            /*if ($view_name == "BA_CACHE_HOUSE_FLAT_GROUPED") {
                die($query);
            }*/
            return static::get_all_by_query($query);
        }
    }
