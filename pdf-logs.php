<?php 

include_once ('config.php');

	// armazeno o conteúdo na variável html
    $html .= '<table>';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Código</th>';
    $html .= '<th>Nome</th>';
    $html .= '<th>Login</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';

    //codigo sql a ser executado
    $sql = "SELECT * FROM usuario";
    //variavel com função de execuçãode query
    ($result = mysqli_query($connection, $sql));
    
    //transforma a variavel $log em array
    while ($row = mysqli_fetch_assoc($result)) { 
    
    //apresenta os resultados retornados do banco em formato de linhas da tabela
        //$html .= '<tr><td>' . $log['log_id'] . "</td>";
        //$html .= '<td>' . $log['log_nome'] . "</td>";
        //$html .= '<td>' . $log['log_horario'] . "</td>";
        //$html .= '<td>' . $log['log_tipodeacesso'] . "</td>";

        $html .= '<td>' . $row['USU_CODIGO'] . "</td>";
        $html .= '<td>' . $row['USU_NOME'] . "</td>";
        $html .= '<td>' . $row['USU_LOGIN'] . "</td>";
        //$html .= '<td>' . $row['USU_SENHA'] . "</td>";

    }
    
    $html .= '</table';
    $html .= '</tbody>';


	// carrego o dompdf e referencio ele
	require_once 'dompdf/autoload.inc.php';
	use Dompdf\Dompdf;

	// instancio o Dompdf
	$dompdf = new Dompdf();


	// carrega a página html no dompdf
	$dompdf->loadHtml($html);

	// seto as opções do pdf
	$dompdf->set_paper("a4", "portrait");

	// renderizo o HTML como PDF
	$dompdf->render();

	// executo a saída do PDF no próprio browser
	$dompdf->stream();


 ?>