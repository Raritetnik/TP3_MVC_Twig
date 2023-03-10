{{ include('main-menu.php', {title: 'Facture', pageHeader: 'Facture modification'})}}
<main>
    <form action="?url=facture/update" method="POST" class="form-box">
        <label for="">Date de facturation:
            <input type="date" name="date" value="{{ facture.date }}">
        </label>
        <label for="">Livraison:
            <select name="Livraison_id">
            {% if livraisons != null %}
                {% for livraison in livraisons %}
                    <option value='{{ livraison.id }}' {{ (livraison.id == facture.Livraison_id) ? 'selected' : '' }}>
                        {{ livraison.modeLivraison }}</option>
                {% endfor %}
            {% endif %}
            </select>
        </label>
        <label for="">Paiement:
            <select name="Paiement_id">
            {% if paiements != null %}
                {% for paiement in paiements %}
                    <option value='{{ paiement.id }}' {{ (paiement.id == facture.Paiement_id) ? 'selected' : '' }}>
                        {{ paiement.modePaiement }}</option>
                {% endfor %}
            {% endif %}
            </select>
        </label>
        <label for="">Membre:
            <select name="Membre_id">
            {% if membres != null %}
                {% for membre in membres %}
                    <option value='{{ membre.id }}' {{ (membre.id == facture.Membre_id) ? 'selected' : '' }}>
                        {{ membre.Nom }}</option>
                {% endfor %}
            {% endif %}
            </select>
        </label>
        <input name='id' hidden type="hidden" value="{{ facture.id }}">
        <input type="submit" value="Save">
    </form>
</main>
