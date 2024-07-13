import React from 'react'

export const ComentsView = () => {
  return (
      <>
          <section className="pop_commentaries">
              <ion-icon
                  class="comments_view"
                  name="chatbubble-outline"
              ></ion-icon>
          </section>
          {/*Tengo la intencion de hacer que el boton de enviar solo aparezca cuando el usuario haya escrito un mensaje,
        de lo contrario permanecera oculto, todo esto se hara con jsx */}
      </>
  );
}
