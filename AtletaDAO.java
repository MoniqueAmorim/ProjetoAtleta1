package br.com.atleta.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;

import br.com.atleta.bean.Atleta;
import br.com.atleta.util.ConexaoFactory;

public class AtletaDAO {
	public void salvar(Atleta a) throws SQLException {
		StringBuilder sql = new StringBuilder();
		sql.append("INSERT INTO atleta");
		sql.append("(nome) ");
		sql.append("VALUES (?)");

		Connection conexao = ConexaoFactory.conectar();

		PreparedStatement comando = conexao.prepareStatement(sql.toString());
		comando.setString(1, a.getAtleta());

		comando.executeUpdate();
	}

	public void excluir(Atleta a) throws SQLException {
		StringBuilder sql = new StringBuilder();
		sql.append("DELETE from atleta WHERE codigo = ?");

		Connection conexao = ConexaoFactory.conectar();

		PreparedStatement comando = conexao.prepareStatement(sql.toString());
		comando.setLong(1, a.getCodigo());

		comando.executeUpdate();
	}
	
	public void editar (Atleta a) throws SQLException {
		StringBuilder sql = new StringBuilder();
		sql.append("UPDATE atleta ");
		sql.append("SET atleta = ? ");
		sql.append("WHERE codigo = ? ");
		
		Connection conexao = ConexaoFactory.conectar();

		PreparedStatement comando = conexao.prepareStatement(sql.toString());
		comando.setString(1, a.getAtleta());
		comando.setLong(2, a.getCodigo());

		comando.executeUpdate();
	}

	public Fabricante buscarPorCodigo(Atleta a) throws SQLException {
		StringBuilder sql = new StringBuilder();
		sql.append("SELECT codigo, nome ");
		sql.append("FROM atleta ");
		sql.append("WHERE codigo = ? ");
		
		Connection conexao = ConexaoFactory.conectar();
		
		PreparedStatement comando = conexao.prepareStatement(sql.toString());
		comando.setLong(1, a.getCodigo());
		
		ResultSet resultado = comando.executeQuery();
		
		Atleta retorno = null;
		
		if(resultado.next()) {
			retorno = new Atleta();
			retorno.setCodigo(resultado.getLong("codigo"));
			retorno.setNome(resultado.getString("nome"));
		}
		
		return retorno;
	}
	
	public ArrayList<Atleta> listar() throws SQLException {
		StringBuilder sql = new StringBuilder();
		sql.append("SELECT codigo, nome ");
		sql.append("FROM atleta ");
		sql.append("ORDER BY nome ASC ");
		
		Connection conexao = ConexaoFactory.conectar();
		
		PreparedStatement comando = conexao.prepareStatement(sql.toString());
		
		ResultSet resultado = comando.executeQuery();
		
		ArrayList<Atleta> lista = new ArrayList<Atleta>();
		
		while(resultado.next()){
			Atleta a = new Atleta();
			a.setCodigo(resultado.getLong("codigo"));
			a.setNome(resultado.getString("nome"));
			
			lista.add(a);
		}
		return lista;
	}
	
	public ArrayList<Atleta> buscarPorNome(Atleta a) throws SQLException {
		StringBuilder sql = new StringBuilder();
		sql.append("SELECT codigo, nome ");
		sql.append("FROM atleta ");
		sql.append("WHERE nome LIKE ? ");
		sql.append("ORDER BY nome ASC ");
		
        Connection conexao = ConexaoFactory.conectar();
		
		PreparedStatement comando = conexao.prepareStatement(sql.toString());
		comando.setString(1, "%" + a.getNome() + "%");
		
        ResultSet resultado = comando.executeQuery();
		
		ArrayList<Atleta> lista = new ArrayList<Atleta>();
		
		while(resultado.next()){
			Atleta item = new Atleta();
			item.setCodigo(resultado.getLong("codigo"));
			item.setNome(resultado.getString("nome"));
			
			lista.add(item);
		}
		return lista;
	}
		
	public static void main(String[] args) {
	
		Atleta f1 = new Atleta();
		a1.setDescricao("2");
		
		AtletaDAO fdao = new AtletaDAO();
		
		try {
		    ArrayList<Atleta> lista = adao.buscarPorNome(f1);
		
		    for(Atleta a : lista) {
			System.out.println("Resultado : " + a);
		}
		} catch (SQLException e) {
			System.out.println("Ocorreu um ERRO ao tentar pesquisar atletas!");
			e.printStackTrace();
		}
	}
}

