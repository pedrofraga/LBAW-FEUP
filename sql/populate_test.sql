INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('pedrofraga', 'pedro@up.pt', '123abc', '1995-08-03', 'Pedro Fraga', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('luisoliveira', 'luis@up.pt', 'letmein', '1995-12-06', 'Luis Oliveira', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('pedromartins', 'martins@up.pt', 'teste', '1992-03-02', 'Pedro Martins', 'Cliente');

INSERT INTO Marca (nome) VALUES ('Ford');

INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Teste', 'Descricao Teste', 2, 10, 1, 1);

INSERT INTO Licitacao (idLeilao, idCliente, valor) VALUES (1, 3, 14.0);
INSERT INTO Licitacao (idLeilao, idCliente, valor) VALUES (1, 2, 20.0);

INSERT INTO MembroBanido (idMembroBanido, duracao, motivo) VALUES (1, 5, 'Es um Burro!');

INSERT INTO Mensagem (idEmissor, idRecetor, texto) VALUES (2, 1, 'Esta em bom estado?');