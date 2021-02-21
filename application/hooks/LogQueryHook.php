<?php
date_default_timezone_set('Asia/Kolkata');
class LogQueryHook
{

    public function log_queries()
    {
        // load ci instance
        $ci = &get_instance();

        // time required to complete the execution of query
        $times = $ci->db->query_times;

        $output = null;
        
        //to get all queries that has been executed
        $queries = $ci->db->queries;

        if (count($queries) == 0) {
            $output .= "no queries\n";
        } else {
            foreach ($queries as $key => $query) {
                $output .= $query . "\n";
            }
            $took = round(doubleval($times[$key]), 3);
            $datetime=date('Y-m-d H:i:s');
            $output .= "===[took:{$took}]===[datetime:: {$datetime}]\n\n";

        }
        $logDirectory = APPPATH . 'logs/' . date('Y-m-d');
        // check if directory present ,if not create 
        if (!is_dir($logDirectory)) {
            mkdir($logDirectory,0775);

        }
        // Log the queries to a file
        $filepath = $logDirectory . '/SqlQuery-' . date('H') . '.log';
        $handle = fopen($filepath, "a+");
        fwrite($handle, $output . "\n\n");
        fclose($handle);

    }
}
