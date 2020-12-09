package Url

type Url_Noquery struct {
    /* 保留的上请求的参数 */
    Keep_Args array

}

func NewUrl_Noquery(Keep_Args array) *Url_Noquery{
    var this = new(Url_Noquery)
    this.SetKeep_Args(Keep_Args);
    return this
}

func (this *Url_Noquery)GetKeep_Args() array{
    return this.Keep_Args;
}

func (this *Url_Noquery)SetKeep_Args(Keep_Args array) *Url_Noquery{
    this.Keep_Args = Keep_Args;
    return this
}

/**
    */
func (this *Url_Noquery)__invoke()string{

}

