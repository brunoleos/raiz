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
	'qa_create' => 'Създай',
	'qa_save' => 'Запази',
	'qa_edit' => 'Промени',
	'qa_view' => 'Покажи',
	'qa_update' => 'Обнови',
	'qa_list' => 'Списък',
	'qa_no_entries_in_table' => 'Няма записи в таблицата',
	'qa_custom_controller_index' => 'Персонализиран контролер.',
	'qa_logout' => 'Изход',
	'qa_add_new' => 'Добави нов',
	'qa_are_you_sure' => 'Сигурни ли сте?',
	'qa_back_to_list' => 'Обратно към списъка',
	'qa_dashboard' => 'Табло',
	'qa_delete' => 'Изтрий',
	'quickadmin_title' => 'Raiz Redonda',
];