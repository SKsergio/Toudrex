import React from 'react'

export const Comentarios = () => {
  return (
      <>
          <section id="comment" className="comments">
              <form action="" id="form_commentaries">
                  <div className="input_box">
                      <input type="text" className="preview_comentary" required/>
                      <span>Deja un comentario...</span>
                      <i></i>
                  </div>

                  <button type="submit" id="btn_coment">
                      <ion-icon name="navigate-outline"class="btn_coment_icon"></ion-icon>
                  </button>
              </form>
          </section>
      </>
  );
}

