<form method="POST" action="/disciplinas/{{ $disciplina_id }}/turmas">
	{{ csrf_field() }}
	Ministrante: <input name="ministrante"><br />
	Data início: <input name="inicio"><br />
	Data fim: <input name="fim"><br />
	Bibliografia: <textarea name="bibliografia"></textarea><br />
	<button type="submit" class="btn btn-sucess"> Salvar </button>
</form>
