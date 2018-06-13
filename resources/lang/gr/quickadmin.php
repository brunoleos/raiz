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
	'qa_create' => 'Δημιουργία',
	'qa_save' => 'Αποθήκευση',
	'qa_edit' => 'Επεξεργασία',
	'qa_view' => 'Εμφάνιση',
	'qa_update' => 'Ενημέρωησ',
	'qa_list' => 'Λίστα',
	'qa_no_entries_in_table' => 'Δεν υπάρχουν δεδομένα στην ταμπέλα',
	'qa_custom_controller_index' => 'index προσαρμοσμένου controller.',
	'qa_logout' => 'Αποσύνδεση',
	'qa_add_new' => 'Προσθήκη νέου',
	'qa_are_you_sure' => 'Είστε σίγουροι;',
	'qa_back_to_list' => 'Επιστροφή στην λίστα',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Διαγραφή',
	'quickadmin_title' => 'Raiz Redonda',
];