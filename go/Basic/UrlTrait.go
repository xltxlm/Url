package Basic

type UrlTrait struct {
    /* 网址 */
    URL string

}

func NewUrlTrait(URL string) *UrlTrait{
    var this = new(UrlTrait)
    this.SetURL(URL);
    return this
}

func (this *UrlTrait)GetURL() string{
    return this.URL;
}

func (this *UrlTrait)SetURL(URL string) *UrlTrait{
    this.URL = URL;
    return this
}

