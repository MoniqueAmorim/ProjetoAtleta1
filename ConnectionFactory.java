package br.com.atleta.util;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class ConexaoFactory {
	static String USUARIO = "root";
	static String SENHA = "12345";
	static String URL = "jdbc:mysql://localhost:3306/atleta?useTimezone=true&serverTimezone=America/Sao_Paulo";

	public static Connection conectar() throws SQLException {
		Connection conexao = DriverManager.getConnection(URL, USUARIO, SENHA);
		return conexao;
	}

	public static void main(String[] args) {
		try {
			Connection conexao = ConexaoFactory.conectar();
			System.out.println("Conexão realizada com sucesso!");
		} catch (SQLException ex) {
			ex.printStackTrace();
			System.out.println("Não foi possivel realizar a conexão!");
		}
	}
}