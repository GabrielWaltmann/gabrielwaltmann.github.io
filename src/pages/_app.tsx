import type { AppProps } from 'next/app'
import '../styles/global.scss'
import Link from 'next/link'

export default function App({ Component, pageProps }: AppProps) {
  return (
        <Component {...pageProps} />
  )
}
