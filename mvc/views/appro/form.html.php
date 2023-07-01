<?php
use App\Core\Session;
 if(Session::isset("errors")) {
      $errors=Session::get("errors");
      Session::unset("errors");  
 }
 if(Session::isset("sms")) {
    $sms=Session::get("sms");
    Session::unset("sms");  
}
?>
<div class=" card w-75 mt-3 ">

    <div class=" card-body ">
        <?php if(!empty($sms)):?>
        <div class="alert alert-info" role="alert">
            <?=$sms??""?>
        </div>
        <?php endif?>
        <form class=" my-3" style="margin-left: 10px;" method="post" action="<?=BASE_URL?>/appro/add/detail">
            <div class="row w-100 d-flex">
                <div class="col-6">
                    <div class="mb-2">
                        <label for="" class="form-label">Article</label>
                        <select class="form-select form-select-md" name="articleID" id="">
                            <?php foreach($articles as $article):?>
                            <option value="<?=$article->getId()?>"><?=$article->getLibelle()?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="mb-2 col-2">
                    <label for="" class="form-label">Qte Appro</label>
                    <input type="text" class="form-control" name="qteAppro" id="" aria-describedby="helpId"
                        placeholder="">

                </div>
                <div class="col-2 ml-2 mt-1">
                    <label for="" class="form-label"></label>
                    <button type="submit" class="form-control btn btn-primary">Ajouter</button>
                </div>
            </div>
        </form>
        <div class="text-danger" style="margin-left: 10px;">
            <?= $errors['libelle']??"" ?>
        </div>
        <h5 class=" card-title " style=" margin-left: 10px;">Liste des Articles a approvisionnes</h4>
            <div class="container mt-3">
                <div class="table-responsive table-bordered table-light mt-1">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">Article</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Qte Appro</th>
                                <th scope="col">Montant</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $total=0;
                             if(Session::isset("detailsAppro")):?>

                            <?php
                                   $detailsAppro=Session::get("detailsAppro");
                                   $total=Session::get("total");
                                  foreach($detailsAppro as $detail):?>
                            <tr>
                                <td> <?=$detail['article']?> </td>
                                <td> <?=$detail['prix']?> </td>
                                <td> <?=$detail['qteAppro']?> </td>
                                <td> <?=$detail['montant']?></td>
                                <td>
                                    <a class="btn btn-danger btn-sm mr-2" href="#" role="button">-</a>
                                    <a class="btn btn-success btn-sm " href="#" role="button">+</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
                <form class="my-3 d-flex flex-column " style="margin-left: 10px;" method="post"
                    action="<?=BASE_URL?>/appro/create">
                    <div class="col-8 row ml-2  mb-2 ">
                        <div class="fw-bold fs-4">Total : <span class="text-danger ">
                                <?=$total?> CFA
                            </span>
                        </div>

                    </div>
                    <div class="col-3  offset-md-9 float-end">
                        <button type="submit" name="save-appro"
                            class="form-control btn btn-primary ">Enregister</button>

                    </div>
                </form>
            </div>
    </div>
</div>