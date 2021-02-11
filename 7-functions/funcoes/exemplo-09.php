<?php 

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//inicio: Diretor comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//inicio: Gerente de vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//termino:Gerente de vendas
				)
			),
			//termino: Diretor comercial
			//inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//inicio: Gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							//inicio: Supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							//termino: supervisor de pagamentos
						)
					),
					//termino: Gerente de contas a pagar
					//inicio: Gerente de compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//inicio: Supervisor de suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(

									array(
										'nome_cargo'=>'Funcionário'
									)

								)
							)
							//termino: supervisor de suprimentos
						)
					)
					//termino: Gerente de compras
				)
			)
			//termino: Diretor financeiro

		)
	)

);

function exibe($cargos){


	$html = '<ul>';

	foreach ($cargos as $cargo) {
		
		$html .="<li>";

		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count ($cargo['subordinados']) > 0){

			$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";


	
	}

	$html .= "</ul>";

	return $html;	
	
}

echo exibe($hierarquia);

 ?>