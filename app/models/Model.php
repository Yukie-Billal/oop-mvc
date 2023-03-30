<?php 

class Model
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;

    protected $koneksi;

    protected $table = __CLASS__;

    protected $primaryKey = 'id';

    protected $guard = [];

    protected $fillabled = [];

    protected $hidden = [];
    protected $autoIncrement = true;

    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host,$this->user,$this->pass,$this->name);
    }
    public function get($column = null)
    {
        $table = $this->table;
        if ($column == null) {
            // if ($this->hidden) {
            //     $sql = mysqli_query($this->koneksi, "SELECT * FROM $table");
            // } else {
                $sql = mysqli_query($this->koneksi, "SELECT * FROM $table");
            // }
        } else {

        }
        // $data = mysqli_fetch_array($sql);
        return $sql;
    }
    public function find($value)
    {
        return mysqli_query($this->koneksi, "SELECT * FROM $this->table WHERE $this->primaryKey ='$value'");
        
    }
    public function delete($value, $column = null)
    {
        if ($column == null) {
            $column = $this->primaryKey;
        }
        return mysqli_query($this->koneksi, " DELETE FROM $this->table WHERE $column ='$value'");
    }
    public function insert($params)
    {
        return mysqli_query($this->koneksi, "INSERT INTO $this->table VALUES('','$params[1]','$params[2]','$params[3]')");
    }
    public function query($query)
    {
        return mysqli_query($this->koneksi, $query);
    }
    public function where($column, $value)
    {
        return mysqli_query($this->koneksi,"SELECT * FROM $this->table WHERE $column = '$value'");
    }
}