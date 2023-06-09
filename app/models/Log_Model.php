<?php 




class Log_Model{

    private $table = 'tb_log';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLog() {
        $this->db->query("SELECT * FROM ". $this->table . " ORDER BY id_log DESC");

        return $this->db->resultSet();
        
    }

    public function addLog($log){

            $query = "INSERT INTO tb_log VALUES ('', :date_log, :log_data)";
        
            $this->db->query($query);
            $this->db->bind(':date_log', $log['date_log']);
            $this->db->bind(':log_data', $log['log_data']);

            $this->db->execute();

            return $this->db->rowCount();
    }
}

?>