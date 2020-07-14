frappe.ui.form.on('Child Doctype', {
  fieldname_trigger: async function(frm, cdt, cdn) {
    var doc = locals[cdt][cdn];
		
		var a;
		var b;
		await frappe.db.get_value('A Doctype', {'name': doc.a_docname}, 'a_fieldname', function(val) {
			a = val.a_field_name;
		});
		await frappe.db.get_value('A Doctype', {'name': doc.a_docname}, 'also_fieldname', function(val) {
			b = val.also_field_name;
		});

    frappe.model.set_value(cdt, cdn, 'target_fieldname', a+' '+b);
    frm.refresh_field('target_fieldname');
  }
});
