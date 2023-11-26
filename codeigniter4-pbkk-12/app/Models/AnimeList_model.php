<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class AnimeList_model extends Model
{
    protected $table = 'animelist';
     
    public function getAnimeList($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['no' => $id]);
        }   
    }

    public function saveAnimeList($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editAnimeList($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('no', $id);
        return $builder->update($data);
    }

    public function deleteAnimeList($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['no' => $id]);
    }
 
}