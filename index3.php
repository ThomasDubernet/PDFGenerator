<?php

$conf = [
    "work" => 'dev'
];

$date = new DateTime();
$dateValid = new DateTime(); 
ob_start();
?>
<style>
    *{
        font-size: 7pt;
    }
    .t-6{
        font-size: 6pt;
    }
    .t-11{
        font-size: 11pt;
    }
    .t-15{
        font-size: 15pt;
    }
    table{
        width: 100%;
        vertical-align: top;
        border-collapse: collapse;
    }
    td ul.list-work{
        list-style-type: "- ";
        padding-inline-start: 0;
    }
    hr{
        height: 1px;
        background: #000000;
        border: none;
    }

</style>

<page>
    <page_header backtop="25mm">
        <table>
            <tr>
                <td style="width: 40%; text-align:center;">
                    <strong class="t-15">Thomas Dubernet</strong>
                </td>
                <td class="t-11" style="width: 30%">
                    Développeur web & mobile.<br>
                    -<br>
                    Contact<br>
                    +33 (0)6 11 90 59 49<br>
                    contact@t4code.fr
                </td>
                <td class="t-11" style="width: 30%">
                    Siret : 879 724 342 00016<br>
                    -<br>
                    Networks<br>
                    t4code.fr<br>
                    linkedin.com/in/thomas-dubernet
                </td>
            </tr>
        </table>
        <br><br>
        <table>
            <tr>
                <td style="width: 20%;">
                    <strong style="font-size: 12pt;">devis client |</strong>
                </td>
                <td style="font-size: 8pt;width: 20%;">
                    <strong style="font-size: 8pt;">
                    Stéphane martin<br>
                    SOLutions+
                    </strong><br>
                    -<br>
                    Contact<br>
                    +33 (0)6 11 90 59 49<br>
                    contact@t4code.fr
                </td>
                <td style="font-size: 8pt;width: 20%">
                    235 Allée Isaac Newton<br>
                    33127 Saint Jean D'Illac
                </td>
                <td style="font-size: 12pt;width: 20%; text-align: right;">
                    <strong class="t-11">Devis n°<?= str_replace('/', '', date('d/m/y')) ?> </strong>
                </td>
                <td style="font-size: 8pt;width: 20%; text-align: right;">
                    Martillac<br>
                    le <?= $date->format('d/m/y') ?>
                </td>
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
        <?php break; case "dev": ?>
            <table style="width:100%; margin-top: 10mm;">
                <tr>
                    <td style="width: 20%;">
                        Nature de la prestation |
                    </td>

                    <td style="width:60%;">
                        <strong>-<br>
                        Web Design | Maquetage</strong>
                        <ul class="list-work">
                            <li>Choix typo</li>
                            <li>Choix colorimétrique</li>
                            <li>Choix images</li>
                            <li>Web design de chaque pages</li>
                        </ul>
                    </td>

                    <td style="width:20%;text-align: right;">
                    <br>
                        300, 00€<br>
                        1 jr
                    </td>
                </tr>
            </table>
        <?php break; ?>
        <?php endswitch; ?>
    </page_header>

    <page_footer>
        <table class="paiement">
            <tr>
                <td style="width: 20%;">
                    <h5>Nature du paiement |</h5>
                </td>

                <td class="flex" style="width: 80%;">
                    <hr />
                    <table>
                        <tr>
                            <td style="width:60%;">Date de validité du devis :</td>
                            <td style="width:20%;"><?php $dateValid->modify('+1 month'); echo $dateValid->format('d/m/y') ?></td>
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
                            <td style="width:20%; text-align:right;">300, 00€</td>
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
                            <td class="t-6" style="width:60%;">
                            <em>Conditions de règlement à 30 jours date de facture. Aucun escompte en cas de paiement anticipé.
                                    Possibilité de paiement en plusieurs fois établit avec le client avant signature de ce contrat.</em> <br><br>
                                    <strong>Mise en production directement à compter de la réception du devis dûment signé.
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
                            <td style="width:20%; text-align:right;"><strong>Signature</strong></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </page_footer>
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
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/devis/test.pdf')) {
            unlink($_SERVER['DOCUMENT_ROOT'] . '/devis/test.pdf');
            $pdf->output($_SERVER['DOCUMENT_ROOT'] . '/devis/test.pdf', 'F');
        } else {
            $pdf->output($_SERVER['DOCUMENT_ROOT'] . '/devis/test.pdf', 'F');

        }
        // exit();
    }
    catch(Html2PdfException $e){
        die($e);
    }
?>

<h2>Bonjour voilà le devis</h2>

<embed src="http://localhost:8000/devis/test.pdf" width=800 height=500 type='application/pdf' />