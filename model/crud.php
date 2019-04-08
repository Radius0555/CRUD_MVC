<?php
include 'model/model.php';

class CrudModel extends Model
{
	public function getAll()
	{
	$query="SELECT name, job, wage FROM empl";
	$select=$this->pdo->query($query);
	foreach($select as $row)
	{
		$data[] = $row;
	}
		$select->closeCursor();
		return $data;
	}
	public function insert($data)
	{
        $ins=$this->pdo->prepare('INSERT INTO empl (name, job, wage) VALUES (
        :name, :job, :wage)');
        $ins->bindValue(':name', $data['name'], PDO::PARAM_STR);
        $ins->bindValue(':job', $data['job'], PDO::PARAM_STR);		
        $ins->bindValue(':wage', $data['wage'], PDO::PARAM_STR);
        $ins->execute();	
	}
    public function delete($id) 
	{
        $del=$this->pdo->prepare('DELETE FROM empl WHERE id=:id');
        $del->bindValue(':id', $id, PDO::PARAM_INT);
        $del->execute();
    }
}