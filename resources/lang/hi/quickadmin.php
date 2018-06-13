<?php

return [
		'user-management' => [		'title' => 'Gerenciamento de usuários',		'fields' => [		],	],
		'roles' => [		'title' => 'Funções',		'fields' => [			'title' => 'Título',		],	],
		'users' => [		'title' => 'Usuários',		'fields' => [			'name' => 'Nome',			'email' => 'E-mail',			'password' => 'Senha',			'role' => 'Função',			'remember-token' => 'Lembrar Senha',		],	],
		'user-actions' => [		'title' => 'Ações do usuário',		'created_at' => 'Time',		'fields' => [			'user' => 'Usuário',			'action' => 'Ação',			'action-model' => 'Modelo de ação',			'action-id' => 'ID de ação',		],	],
		'escolas' => [		'title' => 'Escolas',		'fields' => [			'razao-social' => 'Razao social',			'nome-fantasia' => 'Nome fantasia',			'cnpj' => 'Cnpj',			'endereco' => 'Endereco',			'logo' => 'Logo',			'telefone' => 'Telefone',			'responsavel' => 'Responsavel',		],	],
		'professores' => [		'title' => 'Professores',		'fields' => [			'nome' => 'Nome',			'escola' => 'Escola',			'materias' => 'Materias',			'turmas' => 'Turmas',		],	],
		'alunos' => [		'title' => 'Alunos',		'fields' => [			'nome' => 'Nome',			'escola' => 'Escola',			'idade' => 'Idade',			'serie' => 'Serie',			'turma' => 'Turma',			'turno' => 'Turno',			'endereco' => 'Endereco',			'nome-do-responsavel' => 'Nome do responsavel',			'cpf-do-responsavel' => 'Cpf do responsavel',			'telefone-do-responsavel' => 'Telefone do responsavel',			'email-do-responsavel' => 'Email do responsavel',		],	],
		'apps' => [		'title' => 'Apps',		'fields' => [			'aluno' => 'Aluno',			'escola' => 'Escola',			'personagem' => 'Personagem',			'pontuacaomax' => 'Pontuacaomax',			'itemcabeca' => 'Itemcabeca',			'itemtorso' => 'Itemtorso',			'itemperna' => 'Itemperna',			'runas' => 'Runas',		],	],
	'qa_create' => 'बनाइए (क्रिएट)',
	'qa_save' => 'सुरक्षित करे ',
	'qa_edit' => 'संपादित करे (एडिट)',
	'qa_view' => 'देखें',
	'qa_update' => 'सुधारे ',
	'qa_list' => 'सूची',
	'qa_no_entries_in_table' => 'टेबल मे एक भी एंट्री नही है ',
	'qa_custom_controller_index' => 'विशेष(कस्टम) कंट्रोलर इंडेक्स ।',
	'qa_logout' => 'लोग आउट',
	'qa_add_new' => 'नया समाविष्ट करे',
	'qa_are_you_sure' => 'आप निस्चित है ?',
	'qa_back_to_list' => 'सूची पे वापस जाए',
	'qa_dashboard' => 'डॅशबोर्ड ',
	'qa_delete' => 'मिटाइए',
	'quickadmin_title' => 'Raiz Redonda',
];