<?php

class ModelJournal extends Crud{
    protected $table = 'Journal';

    protected $tableAssoc_1 = array(
        "Nom" => 'Admins',
        "FK_nom" => 'Admins_id',
        "id" => 'id_admin');
    protected $primaryKey = 'id';

    protected $fillable = ['adresseIP', 'action', 'date', 'Admins.username'];

    public function selectWith($order='ASC')
    {
        $sql = "SELECT $this->table.$this->primaryKey, ".implode(', ',$this->fillable)
            ." FROM $this->table "
            ." INNER JOIN ".$this->tableAssoc_1['Nom']." ON "
            .$this->tableAssoc_1["Nom"].".id = ".$this->table.".".$this->tableAssoc_1['FK_nom']
            ." ORDER BY $this->table.$this->primaryKey $order";

        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }
}