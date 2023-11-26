<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AnimeList_model;

class AnimeList extends Controller
{
    public function index()
    {
        $model = new AnimeList_model;
        $data['title']     = 'Anime List';
        $data['getAnimeList'] = $model->getAnimeList();
        echo view('templates/header', $data);
        echo view('animelist_view', $data);
        echo view('templates/footer', $data);
    }

    public function add()
    {
        $data['title']     = 'Adding Anime';
        echo view('templates/header', $data);
        echo view('add_view', $data);
        echo view('templates/footer', $data);
    }

    public function adds()
    {
        $model = new AnimeList_model;
        $data = array(
            'name'        => $this->request->getPost('name'),
            'studios'     => $this->request->getPost('studios'),
            'episodes'    => $this->request->getPost('episodes'),
            'releasedate' => $this->request->getPost('releasedate'),
            'type'        => $this->request->getPost('type'),
            'score'       => $this->request->getPost('score')
        );
        $model->saveAnimeList($data);
        echo '<script>
                alert("Succes Adding Anime");
                window.location="'.base_url('animelist').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new AnimeList_model;
        $getAnimeList = $model->getAnimeList($id)->getRow();
        if(isset($getAnimeList))
        {
            $data['animelist'] = $getAnimeList;
            $data['title']  = 'Edit '.$getAnimeList->name;

            echo view('templates/header', $data);
            echo view('edit_view', $data);
            echo view('templates/footer', $data);

        }else{

            echo '<script>
                    alert("Anime ID '.$id.' not found");
                    window.location="'.base_url('animelist').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new AnimeList_model;
        $id = $this->request->getPost('no');
        $data = array(
            'name'        => $this->request->getPost('name'),
            'studios'     => $this->request->getPost('studios'),
            'episodes'    => $this->request->getPost('episodes'),
            'releasedate' => $this->request->getPost('releasedate'),
            'type'        => $this->request->getPost('type'),
            'score'       => $this->request->getPost('score')
        );
        $model->editAnimeList($data,$id);
        echo '<script>
                alert("Anime Data Edited");
                window.location="'.base_url('animelist').'"
            </script>';

    }

    public function delete($id)
    {
        $model = new AnimeList_model;
        $getAnimeList = $model->getAnimeList($id)->getRow();
        if(isset($getAnimeList))
        {
            $model->deleteAnimeList($id);
            echo '<script>
                    alert("Delete Succes");
                    window.location="'.base_url('animelist').'"
                </script>';

        }else{

            echo '<script>
                    alert("Failed to delete !, Anime ID '.$id.' not found");
                    window.location="'.base_url('animelist').'"
                </script>';
        }
    }
}