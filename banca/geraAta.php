<?php

	include_once("conexao.php");
    $html = '<table border=0';
	$html .= '<thead>';

	$html .= '</tbody>';
	$html .= '</table';

    $ata = '09/1_2018';
    $data = 'sexto dia de julho';
    $datafim = '06 de junho de 2018';
    $horario = '19:30';
    $titulotg = 'SISGBA - SISTEMA GERENCIADOR DE BANCAS ACADÊMICAS WEB';
    $aluno1 = 'Junior Dutra';
    $aluno2 = 'Angel Romero';
    $aluno3 = 'Rodriguinho';
    $aluno4 = 'Pedro Henrique';
    $notatg = 8;
    $resultadotg = $notatg >=6 ? 'aprovado' : 'reprovado';
    $presidente = 'Ana Paula Gonçalves Serra';
    $orientador = 'Rita de Cássia Rodrigues';
    $convidado = 'Rita de Cássia Félix';

    $html .= '<br><br> ATA Nº: <b>'.$ata.'</b><br><br><br>
ATA DE DEFESA DO PROJETO DE GRADUAÇÃO DO CURSO DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS, APRESENTADO PELO(S) ALUNO(S): <b>'.$aluno1.', '.$aluno2.', '.$aluno3.', '.$aluno4.'</b>
<br><br><br>Ao '.$data.' de 2018, às '.$horario.', em sessão pública, realizou-se no Laboratório 3 da Faculdade de Tecnologia do Ipiranga a defesa do Projeto de Graduação <b>“'.$titulotg.'”</b>. A Banca Examinadora iniciou suas atividades submetendo os candidatos à forma regimental de defesa do Projeto de Graduação. Terminado o exame, a Banca procedeu ao julgamento e atribuiu a média <b>'.$notatg.'</b>. Desta forma, considera-se <b>'.$resultadotg.'</b> o referido Trabalho de Graduação.
<br><br>Encerradas as atividades foi lavrada a presente ata, que vai assinada pelos membros da Banca Examinadora.
<br><br><br><br>São Paulo, '.$datafim.'.

<br><br><br>
Presidente da Banca: '.$presidente.   '   ________________________<br><br>
Professor Orientador: '.$orientador.  '   ________________________<br><br>
Professor Convidado: '.$convidado.    '   ________________________';
    $html .= '</tr>';
    $html .='</tbody>';
    $html .= '</table';

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("../media/dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();



    // Carrega seu HTML
    $dompdf->load_html('
			<img alt="" src="../media/images/logo_cps.jpg"/><br><br><br><h1 style="text-align: center;"> ATA DE AVALIAÇÃO</h1>
			'. $html .'
		');


	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf",
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>
