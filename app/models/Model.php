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
        $sql = mysqli_query($this->koneksi, "SELECT * FROM $this->table WHERE $this->primaryKey ='$value'");
        return mysqli_fetch_array($sql);
    }
    public function delete($column, $value)
    {
        return mysqli_query($this->koneksi, " DELETE FROM $this->table WHERE $column ='$value'");
    }
    public function insert($params)
    {
        mysqli_query($this->koneksi, "INSERT INTO $this->table VALUES('','$params[1]','$params[2]','$params[3]')");
    }
}
