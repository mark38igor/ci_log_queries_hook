<?php
class LogQueries {

    function logQuery(){
        $ci_instance=&get_instance();
        $query_execution_time=$ci_instance->db->query_times;
        $query=$ci_instance->db->query;
        
        var_dump($query_execution_time);
        var_dump($query);
        
    }
}