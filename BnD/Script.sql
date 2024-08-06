SELECT * FROM pessoa;
SELECT * FROM animal;
SELECT * FROM cidade;

#CONSULTA PESSOA
SELECT pes.id pessoa_id, pes.nome pessoa_nome, pes.email pessoa_email, 
pes.endereco pessoa_endereco, pes.bairro pessoa_bairro, cidade.nome cidade_nome,
pes.cep pessoa_cep
FROM pessoa pes
LEFT JOIN cidade ON cidade.id = pes.id_cidade;

#CONSULTA ANIMAL
SELECT ani.id animal_id, ani.nome animal_nome, ani.especie animal_especie, ani.raca animal_raca, 
ani.data_nascimento animal_nascimento, ani.idade animal_idade, ani.castrado animal_castrado, pessoa.nome nome_dono
FROM animal ani
LEFT JOIN pessoa ON ani.id_pessoa = pessoa.id;

#CONSULTA CIDADE
SELECT * FROM cidade;