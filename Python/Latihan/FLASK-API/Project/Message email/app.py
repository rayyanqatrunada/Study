from flask import Flask, render_template, request, flash, redirect
import smtplib
from email.message import EmailMessage

app = Flask(__name__)
app.secret_key = 'supersecretkey'

# Ganti sesuai kebutuhan
EMAIL_PENERIMA = 'emailkamu@gmail.com'
EMAIL_PENGIRIM = 'emailpengirim@gmail.com'
EMAIL_PASSWORD = 'esmw kran oujf aubk'

@app.route('/', methods=['GET', 'POST'])
def feedback():
    if request.method == 'POST':
        nama = request.form['nama']
        email = request.form['email']
        pesan = request.form['pesan']

        try:
            msg = EmailMessage()
            msg['Subject'] = f"[FEEDBACK] dari {nama}"
            msg['From'] = EMAIL_PENGIRIM
            msg['To'] = EMAIL_PENERIMA
            msg.set_content(f"Nama: {nama}\nEmail: {email}\n\nPesan:\n{pesan}")

            with smtplib.SMTP('smtp.gmail.com', 587) as smtp:
                smtp.starttls()
                smtp.login(EMAIL_PENGIRIM, EMAIL_PASSWORD)
                smtp.send_message(msg)

            flash('✅ Feedback berhasil dikirim!', 'success')
        except Exception as e:
            flash(f'❌ Gagal mengirim feedback: {e}', 'danger')

        return redirect('/')

    return render_template('feedback.html')

if __name__ == '__main__':
    app.run(debug=True)
