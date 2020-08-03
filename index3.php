<?php
// extract(unserialize(file_get_contents('datas.txt')));
$conf = [
    'id' => '1',
    'facture_id' => '1',
    'word' => 'dev',
    'dir' => null,
    'siret' => '879 724 342 00016',
    'adresse' => '25 rue aliénor d\'aquitaine',
    'name' => 'Thomas Dubernet'
];

$p = [
    'id' => '3',
    'state' => '0',
    'name' => 'Projet de test',
    'infos' => [
        'ref' => 'DEV',
        'description' => 'Créer un systeme de génération de devis',
        'price' => '00'
    ],
    'created' => "2011-06-15 20:53:34",
    'price' => null,
    'date_devis' => "2011-06-16",
    'date_facture' => '2011-07-15',
    'client_id' => '2',
    'facture_id' => "0"

];

$c = [
    'id' => '2',
    'name' => 'Client de test',
    'infos' => 'Une info et une autre',
    'mail' => "toto@toto.fr",
    'siret' => '111 111 111 11111'
];
$details = [
    '1' => [
        'ref' => 'DEV',
        'description' => 'Créer un systeme de génération de devis',
        'price' => '00'
    ]
];
ob_start();
?>
<style>
    table{
        width: 100%;
        vertical-align: top;
        border-collapse: collapse;
    }
    table.border td {
        border:1px solid #CFD1D2;
        padding: 3mm 1mm;;
    }
    td.no-border{
        border: none;
    }
    td.moi {
        width:50%;
    }
    td.client{
        width: 50%;
        text-align: right;
    }
    tr.black th, td.black{
        background: #000000;
        color: #fff;
        border: 1px solid #fff;
        padding: 1mm;
    }
    tr.black{
        vertical-align: middle;
    }
    hr{
        height: 1px;
        background: #000000;
        border: none;
    }

    table.paiement p{
        margin: 0;
    }

</style>

<page>

    <page_footer>
        <table class="paiement">
            <tr>
                <td style="width: 25%;">
                    <h5>Nature du paiement |</h5>
                </td>

                <td class="flex" style="width: 75%;">
                    <hr />
                    <table>
                        <tr>
                            <td style="width:60%;">Date de validité du devis :</td>
                            <td style="width:20%;">31 août 2020</td>
                            <td style="width:20%;"></td>
                        </tr>

                        <tr>
                            <td>-</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="width:60%;"><strong>Total hors taxe:</strong></td>
                            <td style="width:20%;"></td>
                            <td style="width:20%;">300, 00€</td>
                        </tr>
                        <tr>
                            <td style="width:60%;">TVA non applicable - article 293 B du CGI</td>
                            <td style="width:20%;"></td>
                            <td style="width:20%;"></td>
                        </tr>
                    </table>
                    
                    <hr />
                    
                    <table>
                        <tr>
                            <td style="width:60%;">
                            <em>Conditions de règlement à 30 jours date de facture. Aucun escompte en cas de paiement anticipé.
                                    Possibilité de paiement en plusieurs fois établit avec le client avant signature de ce contrat.</em> <br>
                                    <strong>Mise en production direectement à compter de la réception du devis dûment signé.
                                            A la validation du devis, un acompte de 30% vous sera demandé.</strong>
                            </td>
                            <td style="width:40%;"></td>
                        </tr>
                    </table>
                    
                    <hr />
                    
                    <table>
                        <tr>
                            <td style="width:60%;">
                                <strong>BIC : CMCIFRP1MON - IBAN : FR76 1469 0000 0154 0000 3385 844</strong>
                            </td>
                            <td style="width:20%;">Bon pour accord le :</td>
                            <td style="width:20%;"><strong>Signature</strong></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </page_footer>

    <page_header backtop="25mm">
        <table>
            <tr>
                <td class="moi">
                    <strong><?= $conf['name'] ?></strong><br>
                    <?= nl2br($conf['adresse']) ?><br>
                    <strong>SIRET: <?= $conf['siret'] ?></strong><br>
                    <em>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, deleniti minus. Nemo corporis quisquam molestiae ab accusamus illo magnam.</em>
                </td>
                <td class="client">
                    <strong><?= $c['name'] ?></strong><br>
                    <?= nl2br($c['infos']) ?><br>
                    <strong>SIRET: <?= $c['siret'] ?></strong>
                </td>
            </tr>
        </table>
        <table style="margin-top:10mm;">
            <tr>
                <td style="width:50%; text-align:left;font-size:120%;"><strong>Devis n°<?= str_replace('/', '', date('d/m/y')) ?> </strong></td>
                <td style="width:50%; text-align:right;">Emis le <?= date('d/m/y') ?></td>
            </tr>
        </table>

        <?php switch($conf['work']) :  case "designer" : ?>
            <table class="border" style="width:100%; margin-top: 10mm;">
                <thead>
                    <tr class="black">
                        <th style="font-size:110%;width:64%;margin-left: 5mm;">Description</th>
                        <th style="font-size:110%;width:6%;">Qtt</th>
                        <th style="font-size:110%;width:18%;">Prix unitaire</th>
                        <th style="font-size:110%;width:12%;">Sous total</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($details as $d) : ?>
                    <tr>
                        <td><?= $d['description'] ?></td>
                        <td>1</td>
                        <td><?= number_format($d['price'], 2) ?> €</td>
                        <td><?= number_format($d['price'], 2) ?> €</td>
                    </tr>
                    <?php endforeach; ?>
                    <tr style="vertical-align: middle;">
                        <td colspan="2" class="no-border"><em>TVA non applicable - article 293 B du CGI</em></td>
                        <td class="black" style="padding: 1mm;">Total: </td>
                        <td><?= $p['price'] ?></td>
                    </tr>
                </tbody>
            </table>
        <?php break; case "developper": ?>

        <?php break; ?>
        <?php endswitch; ?>
    </page_header>
</page>


<?php 
    $content = ob_get_clean();
    require $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';

    use Spipu\Html2Pdf\Exception\Html2PdfException;
    use Spipu\Html2Pdf\Html2Pdf;
    try{
        $pdf = new Html2Pdf('p', 'A4', 'fr');
        $pdf->writeHTML($content);
        // die($content);
        $pdf->output('test.pdf', 'I');
    }
    catch(Html2PdfException $e){
        die($e);
    }
?>