<div class="container">
    <section>
        <h2 class="text-center text-primary">Nouveau devis</h2>
    </section>

    <embed 
    src="/devis/test.pdf"
    width="70%" height="500"
    type='application/pdf'/>

    <?php if(isset($clients)) : ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleSelect1">Choix du client: </label>
                <select class="form-control">
                    <?php foreach($clients as $client) : ?>
                        <option value="<?= $client['id'] ?>"><?= $client['entreprise'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </form>
    <?php elseif(isset($client)) : ?>

        
        <p><?= $client['entreprise'] ?></p>
    <?php else : ?>
        <h3 class="text-danger">Erreur sur la création d'un nouveau devis</h3>
    <?php endif; 
    ob_start();
    ?>
    <page>

        <p>tst</p>
    </page>


    <?php 
    $content = ob_get_clean();
    require $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';

    use Spipu\Html2Pdf\Exception\Html2PdfException;
    use Spipu\Html2Pdf\Html2Pdf;
    try{
        $pdf = new Html2Pdf('p', 'A4', 'fr');
        $pdf->writeHTML($content);
        die($content);
        // $pdf->output('test.pdf');
    }
    catch(Html2PdfException $e){
        die($e);
    }
    
    ?>
    
</div>