//necessary imports
import React, { useState } from 'react'

export const Reactions = ({Cantidad}) => {

  function HandleClick(e) {
    console.log(e)
  }

  return (
    <>
    <section className="reactions">
      <ion-icon onClick={HandleClick} name="heart-outline" class="reactions1"></ion-icon>
      <ion-icon name="happy-outline" class="reactions2"></ion-icon>
      <h2>4</h2>
    </section>
    
    </>
  )
}

//pronto trabajaremos con esto...